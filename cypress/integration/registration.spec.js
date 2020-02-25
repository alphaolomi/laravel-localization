import faker from "faker";

describe("Registration", () => {
    const email = faker.internet.email();
    const password = faker.internet.password();

    // it("goes to the registration page", () => {
    //     cy.visit("http://127.0.0.1:8000/");
    //     cy.contains("Register").click();

    //     cy.url().should("contain", "register");
    // });

    it("gives validation error", () => {
        cy.visit("http://127.0.0.1:8000/register");

        cy.get("input[name=name]").type(faker.name.findName());
        cy.get("input[name=email]").type(email);
        cy.get("input[name=password]").type("123");
        cy.get("input[name=password_confirmation]").type("123");

        cy.get("button")
            .contains("Register")
            .click();

        cy.get("body").should(
            "contain",
            "The password must be at least 8 characters."
        );
    });

    it("successfully register", () => {
        cy.visit("http://127.0.0.1:8000/register");
        cy.get("input[name=name]").type(faker.name.findName());
        cy.get("input[name=email]").type(email);
        cy.get("input[name=password]").type(password);
        cy.get("input[name=password_confirmation]").type(password);
        cy.get("button")
            .contains("Register")
            .click();
        cy.get("body").should(
            "not.contain",
            "The password must be at least 8 characters."
        );

        cy.url().should("contain", "/home");

        cy.get("#navbarDropdown").click();
        cy.contains("Logout").click();
    });

    it("successfully login", () => {
        cy.visit("http://127.0.0.1:8000/login");

        cy.get("input[name=email]").type(email);
        cy.get("input[name=password]").type(password);

        cy.get("button")
            .contains("Login")
            .click();

        cy.url().should("contain", "/home");
        // cy.contains("You are logged in!");
    });

    it("Maintains sessions for logged in users", () => {
        // cy.visit("http://127.0.0.1:8000/login");
        cy.visit("http://127.0.0.1:8000/");
        // cy.contains("You are logged in!");
    });
});
