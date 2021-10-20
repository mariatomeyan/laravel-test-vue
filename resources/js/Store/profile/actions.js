import api from '../../services/api'

export function getProfile(context) {
    api.get('/user').then(res => {
        console.log(res.data.user)
        return res.data.user
    }).then(data => {
        context.commit('SET_PROFILE', data)
    }).catch(err => {
        console.log('err', err)
    })
}

export function updateProfile(context, data) {
    api.post('/user', data).then(res => {
        return res.data
    }).then(data => {
        // toDo getProfile dispatch update profile
        context.dispatch('getProfile')
    }).catch(err => {
        console.log('err', err)
    })
}
