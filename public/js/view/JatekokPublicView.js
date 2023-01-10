import JatekPublicView from "./JatekPublicView.js";

class JatekokPublicView {
    constructor(tomb, szuloElem) {
        szuloElem.html(`
            <table>
                <thead>
                    <tr>
                        <th>Azonosító</th>
                        <th>Játék neve</th>
                        <th>Platform</th>
                        <th>Darabszám</th>
                        <th>Ár</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        `);

        this.tableElem = szuloElem.children('table:last-child');
        this.tbodyElem = this.tableElem.children('tbody');

        tomb.forEach(jatek => {
            new JatekPublicView(jatek, this.tbodyElem);
        });
    }
}

export default JatekokPublicView;