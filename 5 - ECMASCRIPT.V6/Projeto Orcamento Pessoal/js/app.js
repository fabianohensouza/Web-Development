//Creatinga tooltip code
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
  });

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
                
                //Including the id information in the variable expense and then into a array of expenses
                expense.id = i
                expenses.push(expense)
            }
        }
        return expenses
    }

    search(expense) {
        let filteredExpenses = Array()
        filteredExpenses = this.recoverAllRegistry()
        filteredExpenses = filterExpenses(expense, filteredExpenses)
        return filteredExpenses
    }

    removeExpense(id) {
        localStorage.removeItem(id)

        //Call the modal to show a warning in the screen
        showModal(true, 'Despesa removida com sucesso', 'Após removida a despesa não pode ser recuperada.')
    }
}

let db = new Db()

function showModal(result, title, body) {

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

    showExpensesTable()
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

function showExpensesTable(expenses = Array(), filter = false) {

    if (expenses.length == 0 && filter == false) {
        expenses = db.recoverAllRegistry()
    }

    //Selecting tbody element of the table
    let expensesList = document.getElementById('expensesList')
    expensesList.innerHTML = ''

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

    //Creating a deletion buton for the expenses
    let deleteButton = document.createElement("button")
    deleteButton.className = 'btn btn-danger'
    deleteButton.innerHTML = '<span  data-toggle="tooltip" title="Deletar despesa"> <i class="fas fa-times"></i></span>'
    deleteButton.id = 'expense_id_' + expense.id
    deleteButton.onclick = function() { 
    
        //Formating ID removing yhe prefix
        let id = this.id.replace('expense_id_', '')
        //Call the function to remove the expense selected
        db.removeExpense(id)
        //Reload the page to update the expense list
        window.location.reload()
    }
    tableLine.insertCell(4).append(deleteButton)
    })
}

function loadExpenses() {
    let year = document.getElementById('year').value
    let month = document.getElementById('month').value
    let day = document.getElementById('day').value
    let type = document.getElementById('type').value
    let description = document.getElementById('description').value
    let value = document.getElementById('value').value

    let expense = new Expense(year, month, day, type, description, value)
    return expense
}

function searchExpense() {
    let year = document.getElementById('year').value
    let month = document.getElementById('month').value
    let day = document.getElementById('day').value
    let type = document.getElementById('type').value
    let description = document.getElementById('description').value
    let value = document.getElementById('value').value

    let expense = new Expense(year, month, day, type, description, value)
    let expenses = db.search(expense)
    showExpensesTable(expenses, true)
}

function filterExpenses(expense, filteredExpenses) {
    //Filtering Year
    if (expense.year != '') {
        filteredExpenses = filteredExpenses.filter(d => d.year == expense.year)
    }

    //Filtering Month
    if (expense.month != '') {
        filteredExpenses = filteredExpenses.filter(d => d.month == expense.month)
    }

    //Filtering Day
    if (expense.day != '') {
        filteredExpenses = filteredExpenses.filter(d => d.day == expense.day)
    }

    //Filtering Type
    if (expense.type != '') {
        filteredExpenses = filteredExpenses.filter(d => d.type == expense.type)
    }

    //Filtering Description
    if (expense.description != '') {
        filteredExpenses = filteredExpenses.filter(d => d.description == expense.description)
    }

    //Filtering Value
    if (expense.value != '') {
        filteredExpenses = filteredExpenses.filter(d => d.value == expense.value)
    }
    
    return filteredExpenses
}

function generateStatistic() {
    let statistic = document.getElementById('statistic').value
    if (statistic == '') {
        //Call the modal to show a warning in the screen
        showModal(false, 'Opção Inválida', 'Selecione uma opção na lista abaixo.')
        return
    }
    let expenses = db.recoverAllRegistry()
    console.log(expenses)
}

