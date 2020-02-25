
describe("Welcome", () => {
    it("Shows Wellcome", () => {
        cy.visit("http://127.0.0.1:8000");

        cy.contains("Wellcome");
    });

    it("Shows KAribu ", () => {
        cy.visit("http://127.0.0.1:8000/sw");

        cy.contains("Karibu");
    });
});

