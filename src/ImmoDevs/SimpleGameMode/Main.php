<?php

namespace ImmoDevs\SimpleGameMode;

use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\player\GameMode;
use pocketmine\player\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\lang\Translatable;

class Main extends PluginBase {

    private array $configMessages;

    public function onEnable(): void
    {
        $this->saveDefaultConfig();
        $this->configMessages = $this->getConfig()->get("messages", []);
        $this->getLogger()->info(TextFormat::GREEN . "SimpleGameMode By ImmoDevs enabled");
    }

    public function onDisable(): void
    {
        $this->getLogger()->info(TextFormat::RED . "SimpleGameMode By ImmoDevs disabled");
    }

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool
    {
        if (!$sender->hasPermission("simplegamemode." . $command->getName())) {
            $sender->sendMessage(TextFormat::RED . "You do not have permission to use this command.");
            return false;
        }
        
        if (count($args) < 1) {
            $sender->sendMessage(TextFormat::RED. "Usage: /". $command->getName(). " <gamemode>");
            return false;
        }
        
        if (!$sender instanceof Player && count($args) === 0) {
            $sender->sendMessage(TextFormat::RED. "This command can only be used in-game or with a player/selector.");
            return false;
        }

        $targetPlayers = [$sender];
        if (count($args) > 0) {
            $targetPlayers = $this->resolvePlayer($sender, $args[0]);
            if(empty($targetPlayers)) {
                $sender->sendMessage(TextFormat::RED . "No players matched the given selector.");
                return false;
            }
        } elseif ($sender instanceof Player) {
            $targetPlayers = [$sender];
        } else {
            $sender->sendMessage(TextFormat::RED . "You must  specify a player or selector when using this command from console.");
            return false;
        }

        $gamemode = match ($command->getName()) {
            "gmc" => GameMode::CREATIVE(),
            "gms" => GameMode::SURVIVAL(),
            "gma" => GameMode::ADVENTURE(),
            "gmsp" => GameMode::SPECTATOR(),
            default => null,
        };

        if ($gamemode === null) {
            return false;
        }

        foreach ($targetPlayers as $player) {
            $player->setGamemode($gamemode);
            $player->sendMessage($this->configMessages["personal-gamemode-change"]);
            if ($sender !== $player) {
                $senderMessage = str_replace(
                    ["{player}", "{gamemode}"],
                    [$player->getName(), $this->getGamemodeName($gamemode)],
                    $this->configMessages["player-gamemode-change"]
                );
                $sender->sendMessage($senderMessage);
            }
        }

        return true;
    }

    private function resolvePlayer(CommandSender $sender, string $selector): array
    {
        $server = $this->getServer();
        switch ($selector) {
            case "all":
                return $server->getOnlinePlayers();
            case "@a":
                return $server->getOnlinePlayers();
            case "@s":
                return [$sender];
            default:
                $selector = strtolower($selector);
                $matchedPlayers = [];
                foreach ($server->getOnlinePlayers() as $player) {
                    if (strpos(strtolower($player->getName()), $selector) === 0) {
                        $matchedPlayers[] = $player;
                    }
                }
                return $matchedPlayers;
        }
    }

    private function getGameModeName(GameMode $gamemode): string {
        return match ($gamemode) {
            GameMode::CREATIVE() => "Creative",
            GameMode::SURVIVAL() => "Survival",
            GameMode::ADVENTURE() => "Adventure",
            GameMode::SPECTATOR() => "Spectator",
            default => "Unknown",
        };
    }
}