import api from '../../services/api'

export function getTodos(context) {
    api.get('/todos').then(res => {
        return res.data
    }).then(data => {
        context.commit('SET_TODOS', data)
    }).catch(err => {
        console.log('err', err)
    })
}

export function create(context, data) {
    api.post('/todos', data).then(res => {
        return res.data
    }).then(data => {
        context.commit('SET_TODOS', [data])
    }).catch(err => {
        console.log('err', err)
    })
}

export function comment(context, data)
{
    var todo_id = data.todo_id
    api.post(`/todo/${todo_id}/comment`, {
        todo_id: data.todo_id,
        comment: data.comment
    }).then(res => {
        return res.data
    }).then(data => {
        context.commit('SET_TODOS', [data])
    }).catch(err => {
        console.log('err', err)
    })
}
