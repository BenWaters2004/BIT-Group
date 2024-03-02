let currentIndex = 0;
const blocks = document.querySelectorAll('.block');

function showBlocks() {
    blocks.forEach((block, index) => {
        if (index >= currentIndex && index < currentIndex + 3) {
            block.style.display = 'block';
        } else {
            block.style.display = 'none';
        }
    });
}

function nextBlock() {
    if (currentIndex < blocks.length - 3) {
        currentIndex++;
        showBlocks();
    }
}

function prevBlock() {
    if (currentIndex > 0) {
        currentIndex--;
        showBlocks();
    }
}

showBlocks();