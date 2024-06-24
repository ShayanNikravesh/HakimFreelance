$input = jQuery("input.pin");

$input.on("keydown", function (e) {
    var keyCode = e.keyCode;

    if ((keyCode === 46)                                  // allow delete
        || (keyCode == 86 && (e.ctrlKey || e.metaKey))) { // allow paste
        return true;
    }

    e.preventDefault();

    if (isNumKeyCode(keyCode)) { // digit
        this.value = String.fromCharCode(keyCode);
        moveNext(this);

    } else if (keyCode === 8) { // backspace
        if (!this.value) {
            movePrev(this).val('');
        } else {
            this.value = '';
        }

    } else if (keyCode === 37 || (e.shiftKey && keyCode === 9)) { // left, shift+tab
        movePrev(this);

    } else if (keyCode === 39 || keyCode === 9) { // right, tab
        moveNext(this);
    }
});


$input.on('paste', function (e) {
    e.preventDefault();
    var data = e.originalEvent.clipboardData.getData('text/plain');
    var digits = data.trim().split('').filter(isNum);
    fill(digits);
});

function fill(digits) {
    $('input.pin').each(function (i, input) {
        input.value = digits[i] || '';
    });
}

function isNum(c) {
    return !isNaN(c) && !!c.trim();
}

function isNumKeyCode(keyCode) {
    return 48 <= keyCode && keyCode <= 57;
}

function moveNext(el) {
    return $(el).next().focus();
}

function movePrev(el) {
    return $(el).prev().focus();
}