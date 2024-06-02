# SimpleGameMode

[![SimpleGameMode](https://img.shields.io/badge/SimpleGamemode-v1.0.0-brightgreen.svg)](https://github.com/ImmoDevs/SimpleGameMode)
[![PocketMine-MP](https://img.shields.io/badge/PocketMine--MP-5.0.0-blue.svg)](https://github.com/pmmp/PocketMine-MP)
[![License](https://img.shields.io/badge/License-MIT-yellow.svg)](https://github.com/ImmoDevs/SimpleGameMode/blob/main/LICENSE)

**SimpleGameMode** is a sleek and powerful PocketMine-MP plugin designed to streamline gamemode switching with intuitive and shortened commands. Effortlessly toggle between creative, survival, adventure, and spectator modes. Target specific players or utilize player selectors for maximum flexibility.

## ✨ Features

- **✂️ Simplified Commands**: Shortened commands for quick gamemode changes.
- **🎯 Player Targeting**: Change gamemodes for other players using direct names, partial names, or selectors (`@a`, `@s`).
- **🔐 Permission Control**: Restrict command usage based on permissions.
- **⚙️ Configurable Messages**: Customize success messages for gamemode changes via the config file.

## 📜 Commands

| Command | Description                        | Permission            | Usage                      |
|---------|------------------------------------|-----------------------|----------------------------|
| `/gmc`  | Change to Creative mode            | `simplegamemode.gmc`  | `/gmc [player/@selector]`  |
| `/gms`  | Change to Survival mode            | `simplegamemode.gms`  | `/gms [player/@selector]`  |
| `/gma`  | Change to Adventure mode           | `simplegamemode.gma`  | `/gma [player/@selector]`  |
| `/gmsp` | Change to Spectator mode           | `simplegamemode.gmsp` | `/gmsp [player/@selector]` |

## 🚀 Installation

1. Download the `SimpleGameMode.phar` file from the [releases page](https://github.com/ImmoDevs/SimpleGamemode/releases).
2. Place the `SimpleGameMode.phar` file into the `plugins` directory of your PocketMine-MP server.
3. Restart your server to load the plugin.

## 🔐 Permissions

| Permission            | Description                       | Default |
|-----------------------|-----------------------------------|---------|
| `simplegamemode.gmc`  | Allows the use of `/gmc` command  | `op`    |
| `simplegamemode.gms`  | Allows the use of `/gms` command  | `op`    |
| `simplegamemode.gma`  | Allows the use of `/gma` command  | `op`    |
| `simplegamemode.gmsp` | Allows the use of `/gmsp` command | `op`    |

## 💡 Usage Examples

- Change your own gamemode to Creative:
  ```sh
  /gmc | /gmc @s
  ```
- Change another player's gamemode to Survival:
  ```sh
  /gms PlayerName
  ```
- Change all players' gamemode to Adventure:
  ```sh
  /gma @a
  ```

## ⚙️ Configuration

Customize the success messages in `config.yml`:
```yaml
# Configuration for SimpleGameMode Plugin

# Messages to display when a player's gamemode is changed
messages:
  # Message sent to the command sender when they successfully change another player's gamemode
  player-gamemode-change: "Successfully changed {player}'s gamemode to {gamemode}."
  
  # Message sent to the player when they change their own gamemode
  personal-gamemode-change: "Gamemode changed to {gamemode}."

```

## 🛠️ Building from Source

1. Clone the repository:
   ```bash
   git clone https://github.com/ImmoDevs/SimpleGameMode.git
   ```
2. Navigate to the plugin directory:
   ```bash
   cd SimpleGameMode
   ```
3. Compile the plugin into a `.phar` file:
   ```bash
   zip -r SimpleGameMode.phar . -x "*.git*" -x "*.md" -x "tests/*"
   ```

## 🤝 Contributing

Contributions are welcome! Please open an [Issues](https://github.com/ImmoDevs/SimpleGameMode/issues) or submit a [Pull Request](https://github.com/ImmoDevs/SimpleGameMode/pulls).

## 📄 License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

---

Created with ❤️ by [Unreall](https://github.com/ImmoDevs)
