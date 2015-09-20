class Carousel {
    private element: HTMLElement;
    private items: HTMLCollection;
    private itemCount: number;
    private targetItem: number;
    private time: number;
    private loop;

    constructor(element: HTMLElement) {
        this.element = element;
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
    }

    private initializeDOM() {
        this.addCarouselItemClass();
        this.setItemsLocations();
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
        item.setAttribute("style", "left: " + offset.toString() + "px;");
    }

    private getCalculatedItemLocation(index: number, length: number, target: number) {
        var value: number = (target - index) % length;
        var mid: number = Math.floor(length / 2);
        return (value <= mid && value >= -mid) ?
            value :
            ((value > mid) ?
                (value - length) :
                (value + length));
    }
}
