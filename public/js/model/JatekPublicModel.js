class JatekPublicModel {
    #jatekTomb = [];
    #jatekTomb2 = [];

    constructor(token) {
        this.token = token;
    }

    getJatekTomb() {
        return this.#jatekTomb;
    }

    adatotBeolvas(vegpont, myCallBack) {
        fetch(vegpont, {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
            }
        })
            .then((response) => response.json())
            .then((data) => {
                this.#jatekTomb = data;
                myCallBack(this.#jatekTomb);
            })
            .catch((error) => {
                console.error('Error: ', error);
            });
    }
}

export default JatekPublicModel;