export function SET_TODOS(state, data) {
    data.forEach((val) => {
        state.todos.push(val)
    })
}
