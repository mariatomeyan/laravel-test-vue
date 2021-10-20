export function SET_AUTH(state, data) {
    state.auth = data
    localStorage.setItem('auth', data)
}
