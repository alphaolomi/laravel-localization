import faker from 'faker'

describe('Registration', () => {
    const email = faker.internet.email()
    const password = faker.internet.password()

    it('goes to the registration page', () => {
        cy.visit('http://127.0.0.1:8000/')
        cy.contains('Register').click()

        cy.url().should('contain', 'register')
    })

    it('gives validation error', () => {
        cy.visit('http://127.0.0.1:8000/register')
        cy.get('input[name=name]').type(faker.name.findName())
        cy.get('input[name=email]').type(email)
        cy.get('input[name=password]').type('123')
        cy.get('input[name=password_confirmation]').type('123')
        cy.get('button').contains('Register').click()
        cy.get('body').should('contain', 'The password must be at least 6 characters.')
    })

    it('successfully registering', () => {
        cy.visit('http://127.0.0.1:8000/register')
        cy.get('input[name=name]').type(faker.name.findName())
        cy.get('input[name=email]').type(email)
        cy.get('input[name=password]').type(password)
        cy.get('input[name=password_confirmation]').type(password)
        cy.get('button').contains('Register').click()
        cy.get('body').should('not.contain', 'The password must be at least 6 characters.')

        cy.url().should('contain', '/home')

        cy.get('#navbarDropdown').click()
        cy.contains('Logout').click()
    })

    it('can successfully log in', () => {
        cy.contains('Login').click()
        cy.get('input[name=email]').type(email)
        cy.get('input[name=password]').type(password)
        cy.get('button').contains('Login').click()
        cy.url().should('contain', '/home')

        cy.get('#navbarDropdown').click()
        cy.contains('Logout').click()
    })

    it('can reset password if user exists', () => {
        cy.contains('Login').click()
        cy.contains('Forgot Your Password?').click()
        cy.get('input[name=email]').type(email)
        cy.contains('Send Password Reset Link').click()
        cy.get('body').should('contain', 'We have e-mailed your password reset link!')
    })

    it('gives error if user does not exist for reseting password', () => {
        cy.contains('Login').click()
        cy.contains('Forgot Your Password?').click()
        cy.get('input[name=email]').type(faker.internet.email())
        cy.contains('Send Password Reset Link').click()
        cy.get('body').should('not.contain', 'We have e-mailed your password reset link!')
        cy.get('body').should('contain', "We can't find a user with that e-mail address.")
    })
})
