# principia-web-mini
Implementing the bare necessary to host and distribute Principia levels from a site (a "level server").

## Installation/Usage
It consists of only one PHP script, `apZodIaL1/x.php` which is the endpoint the game uses to download levels (descriptive I know). It will fetch levels inside a `levels/` folder that should be put right next to the `apZodIaL1` folder.

This needs to be put on the root of a site, i.e. `https://example.org/apZodIaL1/x.php`. HTTPS is also required, but the game currently does not verify certificates so a self-signed one should work.

To play a level from the server, specify the domain in the protocol link as such:

`principia://example.org/play/lvl/db/1`

## Example
grejer.voxelmanip.se is set up as a level server. To play a level off of it, open this link in your browser:

[`principia://grejer.voxelmanip.se/play/lvl/db/1`](principia://grejer.voxelmanip.se/play/lvl/db/1)

## License
Probably doesn't even meet the minimum requirement for copyright, CC-0 if it does.
