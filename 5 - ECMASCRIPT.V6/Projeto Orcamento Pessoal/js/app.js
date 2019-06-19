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
        console.log(id)
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

function recordExpense() {
    let year = document.getElementById('year')
    let month = document.getElementById('month')
    let day = document.getElementById('day')
    let type = document.getElementById('type')
    let description = document.getElementById('description')
    let value = document.getElementById('value')

    let expense = new Expense(year.value, month.value, day.value, type.value, description.value, value.value)
    if (expense.validateData()) {
        db.record(expense)
        //Calling the modal with id recordError
        $('#recordSuccess').modal('show')
    } else {
        //Calling the modal with id recordError
        $('#recordError').modal('show')
    }
}

