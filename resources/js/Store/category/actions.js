import api from '../../services/api'

export function get(context) {
    api.get('/category').then(res => {
        return res.data.categories
    }).then(data => {
        context.commit('SET_CATEGORIES', data)
    }).catch(err => {
        console.log('err', err)
    })
}

export function create(context, data) {
    api.post('/category', data).then(res => {
        if(res.status === 201) {
            console.log('data now', res.data)
           context.commit('SET_CATEGORIES', [res.data])
        }
    })
}
