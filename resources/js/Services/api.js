import Axios from "axios";
let HOST = process.env.MIX_VUE_APP_API_HOST

export default  {
    get(url) {
        return Axios.get(HOST+url)
    },
    post(url, params) {
        return Axios.post(HOST+url, params)
    },
    put(){},
    delete(){}
}
