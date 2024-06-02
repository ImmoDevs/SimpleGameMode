# SimpleGamemode

![SimpleGamemode](https://img.shields.io/badge/SimpleGamemode-v1.0.0-brightgreen.svg)
![PocketMine-MP](https://img.shields.io/badge/PocketMine--MP-5.0.0-blue.svg)
![License](https://img.shields.io/badge/License-MIT-yellow.svg)

**SimpleGamemode** is a PocketMine-MP plugin that simplifies changing gamemodes with shorter commands. Easily switch between creative, survival, adventure, and spectator modes, and target other players or use selectors for flexibility.

## Features

- **Simplified Commands**: Shortened commands for quick gamemode changes.
- **Player Targeting**: Change gamemodes for other players using direct names or selectors (`@a`, `@s`, `@p`).
- **Permission Control**: Restrict command usage based on permissions.

## Commands

| Command | Description                        | Permission            |Usage                      |
|---------|------------------------------------|-----------------------|----------------------------|
| `/gmc`  | Change to Creative mode            | `simplegamemode.gmc`  | `/gmc [player/@selector]`  |
| `/gms`  | Change to Survival mode            | `simplegamemode.gms`  | `/gms [player/@selector]`  |
| `/gma`  | Change to Adventure mode           | `simplegamemode.gma`  | `/gma [player/@selector]`  |
| `/gmsp` | Change to Spectator mode           | `simplegamemode.gmsp` | `/gmsp [player/@selector]` |

## Installation

1. Download the `SimpleGamemode.phar` file from the [releases page](#).
2. Place the `SimpleGamemode.phar` file into the `plugins` directory of your PocketMine-MP server.
3. Restart your server to load the plugin.

## Permissions

| Permission            | Description                       | Default |
|-----------------------|-----------------------------------|---------|
| `simplegamemode.gmc`  | Allows the use of `/gmc` command  | `op`    |
| `simplegamemode.gms`  | Allows the use of `/gms` command  | `op`    |
| `simplegamemode.gma`  | Allows the use of `/gma` command  | `op`    |
| `simplegamemode.gmsp` | Allows the use of `/gmsp` command | `op`    |

## Usage Examples

- Change your own gamemode to Creative:
  ```
  /gmc | /gmc @s
  ```
- Change another player's gamemode to Survival:
  ```
  /gms PlayerName
  ```
- Change all players' gamemode to Adventure:
  ```
  /gma @a
  ```
- Change the nearest player's gamemode to Spectator:
  ```
  /gmsp @p
  ```

## Building from Source

1. Clone the repository:
   ```bash
   git clone https://github.com/YourUsername/SimpleGamemode.git
   ```
2. Navigate to the plugin directory:
   ```bash
   cd SimpleGamemode
   ```
3. Compile the plugin into a `.phar` file:
   ```bash
   zip -r SimpleGamemode.phar . -x "*.git*" -x "*.md" -x "tests/*"
   ```

## Contributing

Contributions are welcome! Please open an issue or submit a pull request on [GitHub](https://github.com/ImmoDevs/SimpleGamemode).

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

---

Created with ❤️ by [Unreall](https://github.com/ImmoDevs)
