function drawChessTable(pos, size ) {
    var squareSize = size / 4;

    for (var i = 0; i < 4; i++) {
        
            var posX = pos.left + (squareSize * i);
            var posY = pos.top + (squareSize * j);
            ctx.fillRect(posX, posY, squareSize, squareSize);
        }
    }
}