export default function () {
    return {
        auth: localStorage.getItem('auth') ? JSON.parse(localStorage.getItem('auth')) : false
    }
}
