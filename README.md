# Customies
# English

A PocketMine-MP plugin that implements support for custom blocks, items and entities (Customies fork).

## Community

<a href="https://discord.gg/Tm6wGxWqgh"><img src="https://img.shields.io/discord/989466131305754625?label=discord&color=7289DA&logo=discord" alt="Discord" /></a>

Official Customies Discord community chat for socializing, receiving help with the plugin, and sharing creations. Join in on the fun!

## About This Fork

This fork of Customies aims to preserve **maximum backward compatibility**, especially due to changes in how Minecraft handles custom blocks and items registration across recent updates, especially in the creative inventory.  
It also **fixes the animation desynchronization bug** related to block breaking in survival mode by providing a custom implementation of `SurvivalBlockBreakHandler`, which ensures that visual effects and breaking delay are correctly synchronized.

Special thanks to [Refaltor77](https://github.com/Refaltor77/CopperVanillaMods) for his plugin CopperVanillaMods that help me to fix the bug.

## Important Contributors

| Name                                                  | Contribution                                                                                 |
|:------------------------------------------------------|----------------------------------------------------------------------------------------------|
| [TwistedAsylumMC](https://github.com/TwistedAsylumMC) | Helped research and develop the first versions of Customies as well as maintain the code     |
| [DenielW](https://github.com/DenielWorld)             | Helped research and develop the first versions of Customies                                  |
| [Abimek](https://github.com/abimek)                   | Helped develop the item components implementation and block-related bug fixes                |
| [Unickorn](https://github.com/Unickorn)               | Maintained the code during the PM4 betas and kept it up to date                              |
| [JackNoordhuis](https://github.com/JackNoordhuis)     | Suggested the idea of using async workers and helped write the code which made them function |

# Français (French)
Un plugin PocketMine-MP permettant l'ajout de blocs, objets et entités personnalisés (fork de Customies).

## Communauté

<a href="https://discord.gg/Tm6wGxWqgh"><img src="https://img.shields.io/discord/989466131305754625?label=discord&color=7289DA&logo=discord" alt="Discord" /></a>

Serveur Discord officiel de Customies pour discuter, obtenir de l’aide sur le plugin et partager vos créations. Rejoignez-nous !

## À propos de ce fork

Ce fork de Customies a pour objectif de **préserver un maximum de rétrocompatibilité**, notamment en réponse aux changements fréquents de Minecraft concernant l’enregistrement des blocs et objets personnalisés, notamment dans l'inventaire créatif.  
Il **corrige également le bug de désynchronisation des animations** lors de la casse de blocs en mode survie, grâce à une réimplémentation personnalisée de `SurvivalBlockBreakHandler` qui synchronise correctement les effets visuels avec le délai réel de casse du bloc.

Un grand merci à [Refaltor77](https://github.com/Refaltor77/CopperVanillaMods) pour son plugin CopperVanillaMods qui m'a permis de résoudre ce bug.

## Contributeurs importants

| Nom                                                  | Contribution                                                                                 |
|:-----------------------------------------------------|----------------------------------------------------------------------------------------------|
| [TwistedAsylumMC](https://github.com/TwistedAsylumMC) | A contribué au développement des premières versions de Customies et à la maintenance du code |
| [DenielW](https://github.com/DenielWorld)             | A participé à la recherche et au développement des premières versions                        |
| [Abimek](https://github.com/abimek)                   | A développé les composants d’objets et corrigé des bugs liés aux blocs                       |
| [Unickorn](https://github.com/Unickorn)               | A maintenu le code pendant les bêtas de PM4                                                  |
| [JackNoordhuis](https://github.com/JackNoordhuis)     | A proposé l’idée des workers asynchrones et aidé à leur mise en œuvre                        |
