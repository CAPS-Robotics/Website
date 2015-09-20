class Carousel {
    private element: HTMLElement;
    private controller: HTMLElement;
    private items: HTMLCollection;
    private itemCount: number;
    private targetItem: number;
    private time: number;
    private loop;

    constructor(element: HTMLElement, controller: HTMLElement) {
        this.element = element;
        this.controller = controller;
        this.items = this.element.children;
        this.itemCount = this.items.length;
        this.targetItem = 0;
        this.time = 6000;

        this.initializeDOM();
        this.startUpdateLoop();
    }

    private startUpdateLoop() {
        this.loop = setInterval(this.updateLoop, this.time, this);
    }

    private updateLoop(carousel: Carousel) {
        carousel.targetItem++;
        carousel.setItemsLocations();
        carousel.setTextInvisibleWhenNotTargeted();
        carousel.fillTargetedControl();
    }

    private initializeDOM() {
        this.addCarouselItemClass();
        this.setItemsLocations();
        this.makeControls();
        this.fillTargetedControl();
    }

    private addCarouselItemClass() {
        for (var i = 0; i < this.itemCount; i++) {
            Utils.addClass(this.items[i], "carousel-item");
        }
    }

    private setItemsLocations() {
        for (var i = 0; i < this.itemCount; i++) {
            this.setItemLocation(this.items[i], i, this.itemCount, this.targetItem);
        }
    }

    private setItemLocation(item: Element, index: number, length: number, target: number) {
        var offset: number = this.getCalculatedItemLocation(index, length, target) * this.element.clientWidth;
        var zIndex: number = length + this.getCalculatedItemLocation(index, length, target);
        item.setAttribute("style", "left: " + offset.toString() + "px; z-index: " + zIndex + ";");
    }

    private getCalculatedItemLocation(index: number, length: number, target: number): number {
        var value: number = (target - index) % length;
        var mid: number = Math.floor(length / 2);
        return (value <= mid && value >= -mid) ?
            value :
            ((value > mid) ?
                (value - length) :
                (value + length));
    }

    private setTextInvisibleWhenNotTargeted() {
        for (var i = 0; i < this.itemCount; i++) {
            var item: Element = this.items[i];

            if (i !== this.targetItem % this.itemCount) {
                Utils.addClass(item, "carousel-text-hidden");
            } else {
                Utils.removeClass(item, "carousel-text-hidden");
            }
        }
    }

    private makeControls() {
        for (var i = 0; i < this.itemCount; i++) {
            var control: HTMLElement = document.createElement("span");
            Utils.addClass(control, "carousel-control");
            this.controller.appendChild(control);
        }
    }

    private fillTargetedControl() {
        for (var i = 0; i < this.itemCount; i++) {
            var control: Element = this.controller.children[i];

            if (i !== this.targetItem % this.itemCount) {
                Utils.removeClass(control, "carousel-control--active");
            } else {
                Utils.addClass(control, "carousel-control--active");
            }
        }
    }
}
