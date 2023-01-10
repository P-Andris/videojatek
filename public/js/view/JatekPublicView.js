class JatekPublicView {
    #elem;

    constructor(elem, szuloElem) {
        this.#elem = elem;

        $(szuloElem).append(`<tr><td>${this.#elem.jatek_id}</td><td>${this.#elem.neve}</td><td>${this.#elem.platform}</td><td>${this.#elem.darabszam}</td><td>${this.#elem.ar}</td>`);
    }
}

export default JatekPublicView;