import {AbstractComponent, ComponentLoader} from "../../../AbstractComponent";

declare let $: any;

class PercentageCounter extends AbstractComponent {

    public static selector: string = 'percentage-counter';

    init() {
        super.init();


        let startCounter = 0;
        let counter = parseInt(this.getComponentElement().attr('percentage-counter'));
        let timout;


        timout = setInterval(() => {
            if (startCounter === counter)
            {
                clearInterval(timout);
            }
            else
            {
                startCounter++;
                this.getComponentElement().html(startCounter + "%");
            }
        }, 100)
    }


}

new ComponentLoader(PercentageCounter);
