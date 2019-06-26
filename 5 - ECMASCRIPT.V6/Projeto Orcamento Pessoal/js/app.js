class Expense {
    constructor(year, month, day, type, description, value) {
        this.year = year
        this.month = month
        this.day = day
        this.type = type
        this.description = description
        this.value = value
    }

    validateData() {
        for(let i in this) {

            if(this[i] == '' || this[i] == undefined || this[i] == null ){
                return false
            }
        }

        let insertedDay = parseInt(document.getElementById('day').value)
        let insertedDesc = document.getElementById('description').value
        let insertedValue = parseFloat(document.getElementById('value').value)

        if (!( insertedDay >= 1 && insertedDay <= 31 ) || (insertedDesc == '') || ( insertedValue < 0 || isNaN(value)) ) {
            return false
        }

        return true
    }
}

class Db {

    constructor() {
        let id = localStorage.getItem('id')
        if (id === null) {
            localStorage.setItem('id', 0)
        }
    }

    getNextId() {
        let nextId = localStorage.getItem('id')
        return parseInt(nextId) + 1
    }

    record(data) {
        let id = this.getNextId()
        localStorage.setItem(id, JSON.stringify(data))
        localStorage.setItem('id', id)
    }

    recoverAllRegistry() {

        //Creating a expenses array
        let expenses = Array()

        let id = localStorage.getItem('id')
        //Recover all expenses enrolled in localstorage
        for (let i = 1; i <= id; i ++){

            //Recorver the expenses
            let expense = JSON.parse(localStorage.getItem(i))
            if ( expense !== null ) {
                expenses.push(expense)
            }
        }
        return expenses
    }
}

let db = new Db()

function showModal(result, title, body) {

    console.log(result, title, body)
    document.getElementById("title").innerHTML = title
    document.getElementById("body").innerHTML = body

    if (result) {
        document.getElementById("header").className = "modal-header text-primary"
        document.getElementById("button").className = "btn btn-primary"
        document.getElementById("button").innerHTML = "Continuar"
    } else {
        document.getElementById("header").className = "modal-header text-danger"
        document.getElementById("button").className = "btn btn-danger"
        document.getElementById("button").innerHTML = "Voltar e corrigir"
    }
    $('#showModal').modal('show')
}

function clearFormFields() {
    year.value = ''
    month.value = ''
    day.value = ''
    type.value = ''
    description.value = ''
    value.value = ''
}

function recordExpense() {
    let year = document.getElementById('year')
    let month = document.getElementById('month')
    let day = document.getElementById('day')
    let type = document.getElementById('type')
    let description = document.getElementById('description')
    let value = document.getElementById('value')

    let expense = new Expense(year.value, month.value, day.value, type.value, description.value, value.value)
    let result, body, title
    if (expense.validateData()) {
        db.record(expense)
        //Set parameters to call the modal with Success
        result = true
        title = 'Gravação concluída!'
        body = 'A despesa foi cadastrada com sucesso.'

        //Cleaning all data in the Form Fields
        clearFormFields()

    } else {
        //Set parameters to call the modal with Error
        result = false
        title = 'Erro na gravação dos dados!'
        body = 'Existem campo obrigatórios que não foram preenchidos corretamente.'
    }
    //Calling the modal with the parameters
    showModal(result, title, body)
}

function formatNumbers(type, number) {
    switch (type) {
        case 'int':
            return ("0" + parseInt(number)).slice(-2)
            break

        case 'float':
            return parseFloat(number).toFixed(2)
            break
    }
}

function showExpensesTable() {
    let expenses = Array()
    expenses = db.recoverAllRegistry()

    //Selecting tbody element of the table
    let expensesList = document.getElementById('expensesList')

    //Wade Espenses array, listing each expense in dynamic way
    expenses.forEach( function(expense){
        

    //Adjusting the type
    let expenseTypes = ['Alimentação', 'Educação', 'Lazer', 'Saúde', 'Transporte', 'Outros']
    let expenseCode = parseInt(expense.type) - 1
            
    //Adjusting the numbers to show
    expense.day = formatNumbers('int', expense.day)
    expense.month = formatNumbers('int', expense.month)
    expense.value = formatNumbers('float', expense.value)

    //Creating the table row - tr
    let tableLine = expensesList.insertRow()

    //Creating the table data - td
    tableLine.insertCell(0).innerHTML = `${expense.day}/${expense.month}/${expense.year}`
    tableLine.insertCell(1).innerHTML = expenseTypes[ expenseCode ] 
    tableLine.insertCell(2).innerHTML = expense.description
    tableLine.insertCell(3).innerHTML = expense.value
    })
}

