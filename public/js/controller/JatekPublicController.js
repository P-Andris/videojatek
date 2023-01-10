import JatekokPublicView from "./../view/JatekokPublicView.js";
import JatekPublicModel from "./../model/JatekPublicModel.js";

class JatekPublicController {
    #adatok = [];

    constructor() {
        const token = $('meta[name = "csrf-token]').attr('content');

        const jatekModel = new JatekPublicModel(token);
        
        jatekModel.adatotBeolvas("/api/jatekok", this.jatekPublicAdatok);
    }

    jatekPublicAdatok(tomb) {
        const szuloElem = $('article');
        new JatekokPublicView(tomb, szuloElem);
    }
}

export default JatekPublicController;