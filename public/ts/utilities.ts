class Utils {
    static hasClass(element: Element, cssClass: string) {
        return !!element.className.match(new RegExp("(\\s|^)" + cssClass + "(\\s|$)"));
    }

    static addClass(element: Element, cssClass: string) {
        if (!this.hasClass(element, cssClass)) {
            element.className += " " + cssClass;
        }
    }

    static removeClass(element: Element, cssClass: string) {
        if (this.hasClass(element, cssClass)) {
            var reg = new RegExp("(\\s|^)" + cssClass + "(\\s|$)");
            element.className = element.className.replace(reg, "");
        }
    }

    static toggleClass(element: Element, cssClass: string) {
        if (this.hasClass(element, cssClass)) {
            this.removeClass(element, cssClass);
        } else {
            this.addClass(element, cssClass);
        }
    }
}
