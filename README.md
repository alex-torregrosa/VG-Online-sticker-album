# VG-Online-sticker-album
The sticker album version for viarogame.ml

WIP

This will be the web interface for the viarogame's sticker album.
The game will convert a true/false array to a binary number and then convert it to a hex number that will be stored at the MySQL database.

This album will be accessible from the main website (viarogame.ml), and will be passed the user's nickname and hpage number (initially 0) as a parameter.
Then, the php page will revert the true/false array encoding (hex > bin > t/f ), and echo the stickers corresponding for the page, with blank spaces where the ones the user doesn't own should be.
