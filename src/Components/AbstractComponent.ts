import {
    AbstractComponent as GlobalAbstractComponent,
    ComponentLoader as GlobalComponentLoader,
} from "../../vendor/aktorou/frontend-test-framework/src/Components/AbstractComponent";

export abstract class AbstractComponent extends GlobalAbstractComponent {
    constructor(componentElement, DI) {
        super(componentElement, DI)
    }
}

export class ComponentLoader extends GlobalComponentLoader {
    constructor(component) {
        super(component)
    }
}
