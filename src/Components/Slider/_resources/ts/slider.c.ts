import {AbstractComponent, ComponentLoader} from "../../../AbstractComponent";
import "slick-carousel/slick/slick.min";

declare let $: any;

class Slider extends AbstractComponent {

    public static selector: string = 'slider';

    init() {
        super.init();
        this.getComponentElement().slick({dots: true});
    }
}

new ComponentLoader(Slider);
