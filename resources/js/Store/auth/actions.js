import api from '../../services/api'

export function isAuthenticated(context) {
    api.get('/auth').then(res => {
        context.commit('SET_AUTH', res.data.success)
        return res.data.success
    }).catch(err => {
        console.log('err', err)
    })
}

export function logout(context) {
    api.post('/logout').then(res => {
        localStorage.removeItem('logout')
    })

}
