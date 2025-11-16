
function submitmessage() {
    alert("Comment submitted successfully!");
    return true;
}

function updatemessage() {
    alert("Comment updated successfully!");
    return true;
}

function deletemessage() {
    alert("Comment deleted successfully!");
    return true;
}

function rate(stars) {
    const starsElements = document.querySelectorAll('.star');
    starsElements.forEach((star, index) => {
        if (index < stars) {
            star.classList.add('selected');
        } else {
            star.classList.remove('selected');
        }
    });
    
}