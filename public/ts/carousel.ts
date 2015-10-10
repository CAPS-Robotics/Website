/// <reference path="jquery.d.ts" />

class Carousel {
    private element: JQuery;
    private itemContainer: JQuery;
    private items: JQuery;
    private controller: JQuery;
    private controls: JQuery;
    private time: Number = 6000;
    private target: number = 0;
    private loop;

    constructor(selector: string) {
        this.element = $(selector);
        this.itemContainer = this.element.children("#carousel-items");
        this.items = this.itemContainer.children();
        this.controller = this.element.children("#carousel-controls");

        this.initialize();
    }

    private initialize() {
        this.createControls();
        this.rotate();
        this.startLoop();
    }

    private startLoop() {
        this.loop = window.setInterval(function(carousel) {
            carousel.updateTarget();
            carousel.rotate();
        }, this.time, this);
    }

    private updateTarget(target = this.target + 1) {
        this.target = target % this.items.length;
    }

    private rotate() {
        var target = this.target;

        $.each(this.items, function(index, value) {
            if (index != target) {
                $(value).addClass("carousel-hidden");
            } else {
                $(value).removeClass("carousel-hidden");
            }
        });

        $.each(this.controls, function(index, value) {
            if (index != target) {
                $(value).removeClass("carousel-control--active");
            } else {
                $(value).addClass("carousel-control--active");
            }
        });

    }

    private createControls() {
        var carousel = this;

        for (var i = 0; i < this.items.length; i++) {
            this.controller.append($("<div></div>")
                                    .addClass("carousel-control")
                                    .attr("data-carousel-index", i.toString())
                                    .on('click', function(event) {
                                        var $self = $(this);
                                        var target = parseInt($self.attr("data-carousel-index"));

                                        carousel.updateTarget(target);
                                        carousel.rotate();

                                        window.clearInterval(carousel.loop);
                                        carousel.startLoop();

                                        return false;
                                    }));
        }

        this.controls = this.controller.children();
    }
}
