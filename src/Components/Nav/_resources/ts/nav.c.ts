import {AbstractComponent, ComponentLoader} from "../../../AbstractComponent";

declare let $: any;

class Nav extends AbstractComponent {

    public static selector: string = 'nav';

    init() {
        super.init();

        this.getComponentElement().find('[trigger]').on('click', function()
        {
            this.getComponentElement().toggleClass('nav--open');
        }.bind(this));
    }
}

new ComponentLoader(Nav);
