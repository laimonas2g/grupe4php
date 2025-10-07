console.log('Clean Code Functions');

const createRectangle = ({ x, y, width, height, color }) => {
    return { x, y, width, height, color };
}

const rectangle = createRectangle({
    x: 10,
    y: 20,
    width: 100,
    height: 50,
    color: 'red'
});

const database = {
    users: []
};

const emailService = {
    sendEmail: (to, subject, body) => {
        console.log(`Email sent to ${to} with subject "${subject}" and body "${body}"`);
    }
};

const smsService = {
    sendSMS: (to, message) => {
        console.log(`SMS sent to ${to} with message "${message}"`);
    }
};

function registerAndNotifyUser(email, password, phoneNumber) {
    if (!isUserDataValid(email, password, phoneNumber)) {
        console.log('Invalid user data');
        return;
    }
    saveUserToDatabase(email, password, phoneNumber);
    sendWelcomeEmail(email);
    sendWelcomeSMS(phoneNumber);

}

function isUserDataValid(email, password, phoneNumber) {
    return email.includes('@') && password.length >= 6 && phoneNumber.length >= 10;
}

function saveUserToDatabase(email, password, phoneNumber) {
    const user = { email, password, phoneNumber };
    database.users.push(user);
    console.log('User saved to database:', user);
}

function sendWelcomeEmail(phoneNumber, email) {
    const message = `Welcome! Your phone number is ${phoneNumber}`;
    emailService.sendEmail(email, 'Welcome to Our Service', message);
    console.log('Welcome email sent to:', email);
}

function sendWelcomeSMS(phoneNumber) {
    const message = `Welcome! Your phone number is ${phoneNumber}`;
    smsService.sendSMS(phoneNumber, message);
    console.log('Welcome SMS sent to:', phoneNumber);
}

const newUser = {
    email: 'test@test.com',
    password: 'secret123',
    phoneNumber: '1234567890'
};

registerAndNotifyUser(newUser.email, newUser.password, newUser.phoneNumber);
const loginButton = document.getElementById('loginButton');
loginButton.addEventListener('click', () => {
    alert('Login button clicked!');
});

function loginUser(email, password) {
    ensureValutInput(email, password);
    verifyUserCredentials(email, password);
    createSessionForUser(email);
    redirectToDashboard();
}

function ensureValutInput(email, password) {
    if (!email || !password) {
        throw new Error('Email and password are required');
    }
    if (!email.includes('@')) {
        throw new Error('Invalid email format');
    }
    if (password.length < 6) {
        throw new Error('Password must be at least 6 characters long');
    }
    console.log('Input validation passed');
    return true;
}

function verifyUserCredentials(email, password) {
    const user = database.users.find(user => user.email === email && user.password === password);
    if (!user) {
        throw new Error('Invalid email or password');
    }
    console.log('User credentials verified');
    return true;
}

function createSessionForUser(email) {
    console.log(`Session created for user: ${email}`);
    return true;
}

function redirectToDashboard() {
    console.log('Redirecting to dashboard...');
    return true;
}

loginUser(newUser.email, newUser.password);

function updateUser(email, newPassword, newPhoneNumber) {
    validateUserData(newPassword, newPhoneNumber);
    applyUptade(userData);
    notifyUserOfUpdate(email);
}

function processTransaction(transaction) {
    validateTransaction(transaction);

    if (isPayment(transaction)) {
        processPayment(transaction);
    }
    else if (isRefund(transaction)) {
        processRefund(transaction);
    }
    else {
        throw new Error('Unknown transaction type');
    }
    notifyUserOfTransaction(transaction);
}

function validateAndCreateSession(email, password) {
    ensureValidInput(email, password);
    createSessionForUser(email);
    redirectToDashboard();
} 

function validateAndSendNotification(email, message) {
    ensureValidEmail(email);
    sendNotification(email, message);
}

function validateAndSaveUser(email, password, phoneNumber) {
    ensureValidUserData(email, password, phoneNumber);
    saveUserToDatabase(email, password, phoneNumber);
}

function validateAndProcessTransaction(transaction) {
    ensureValidTransaction(transaction);
    processTransaction(transaction);
}

function validateAndUpdateUser(email, newPassword, newPhoneNumber) {
    ensureValidUserData(newPassword, newPhoneNumber);
    updateUser(email, newPassword, newPhoneNumber);
}

function ensureValidInput(email, password) {
    if (!email || !password) {
        throw new Error('Email and password are required');
    }
    if (!email.includes('@')) {
        throw new Error('Invalid email format');
    }
    if (password.length < 6) {
        throw new Error('Password must be at least 6 characters long');
    }
    console.log('Input validation passed');
    return true;
}



