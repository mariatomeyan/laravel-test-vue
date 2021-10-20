export function SET_CATEGORIES(state, data) {
   data.forEach((val) => {
       state.categories.push(val)
   })
}
