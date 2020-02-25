import faker from "faker";

// login
it("can successfully log in", () => {
    // cy.contains("Login").click();
    cy.get("input[name=email]").type(email);
    cy.get("input[name=password]").type(password);
    cy.get("button")
        .contains("Login")
        .click();
    cy.url().should("contain", "/home");

    cy.get("#navbarDropdown").click();
    cy.contains("Logout").click();
});

// reset
it("can reset password if user exists", () => {
    cy.contains("Login").click();
    cy.contains("Forgot Your Password?").click();
    cy.get("input[name=email]").type(email);
    cy.contains("Send Password Reset Link").click();
    cy.get("body").should(
        "contain",
        "We have e-mailed your password reset link!"
    );
});

// 
it("gives error if user does not exist for reseting password", () => {
    cy.contains("Login").click();
    cy.contains("Forgot Your Password?").click();
    cy.get("input[name=email]").type(faker.internet.email());
    cy.contains("Send Password Reset Link").click();
    cy.get("body").should(
        "not.contain",
        "We have e-mailed your password reset link!"
    );
    cy.get("body").should(
        "contain",
        "We can't find a user with that e-mail address."
    );
});
