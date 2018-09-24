import { RECEIVE_DATA } from './actions'

export default (state = { data : []}, action) => {
    if (action.type == RECEIVE_DATA) {
        return Object.assign({}, state, {
            data: action.payload.data
        }) 
    }

    return state
}
