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
            
            return true
        }
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
}

let db = new Db()

function validateInput(type) {
    switch (type) {
        case 'day':
            let day = parseInt(document.getElementById('day').value)
            console.log(day)
            if ( day < 1 && day ==NaN) {
                console.log('Dia')
                /*result = false
                title = 'Dados incorretos!'
                body = 'O dia inserido é inválido.'
                showModal(result, title, body)*/
            }
                break
        
            case 'desc':
                let desc = document.getElementById('description').value
                console.log(desc)
                if (desc == '') {
                    console.log('Descrição')
                    /*result = false
                    title = 'Dados incorretos!'
                    body = 'Por favor, insira uma descrição da despesa'
                    showModal(result, title, body)*/
                }
                break
        
            case 'value':
                let value = parseFloat(document.getElementById('value').value)
                console.log(value)
                if ( value < 0 && day ==NaN) {
                    console.log('Valor')
                    /*result = false
                    title = 'Dados incorretos!'
                    body = 'O valor inserido é inválido.'
                    showModal(result, title, body)*/
                }
                break
    }
}

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
    } else {
        //Set parameters to call the modal with Error
        result = false
        title = 'Erro na gravação dos dados!'
        body = 'Existem campo obrigatórios que não foram preenchidos.'
    }
    //Calling the modal with the parameters
    showModal(result, title, body)
}

