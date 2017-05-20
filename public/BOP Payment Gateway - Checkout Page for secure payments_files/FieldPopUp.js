// Get the position of the html element specified.
function getAbsolutePosition(element) {
    var ret = new Point();
    for (;
        element && element != document.body;
        ret.translate(element.offsetLeft, element.offsetTop), element = element.offsetParent
        );
    return ret;
}

// A screen coordinate.
function Point(x, y) {
    this.x = x || 0;
    this.y = y || 0;
    this.toString = function () {
        return '(' + this.x + ', ' + this.y + ')';
    };
    this.translate = function (dx, dy) {
        this.x += dx || 0;
        this.y += dy || 0;
    };
    this.getX = function () { return this.x; }
    this.getY = function () { return this.y; }
    this.equals = function (anotherpoint) {
        return anotherpoint.x == this.x && anotherpoint.y == this.y;
    };
}

// Cause the popup to by displayed of hidden depending on the "action" parameter
function SetPopup(popupname, showforname, action) {
    // If popup or target is not passed. 
    // No action won't cause errors but no action will be taken.
    if (popupname.length < 1 || showforname.length < 1) {
        return;
    }

    // Get reference to the html element to be "poped up"
    var dialog = document.getElementById(popupname);
    // Get reference to the element that is activating the popup.
    var control = document.getElementById(showforname);
    // Get the position of the id that is activating the popup.
    var pos = getAbsolutePosition(control);
    // Horizontal Position of Popup.
    dialog.style.left = (pos.x + 15) + "px";
    // Vertical Position of Popup.
    dialog.style.top = (pos.y + 25) + "px";

    switch (action) {
        // Show Popup 
        case 'S':
            dialog.style.display = "block";
            break;
        // Hide Popup 
        case 'H':
            dialog.style.display = "none";
            break;
        // Do nothing. 
        default:
            break;
    }
}