import { RECEIVE_DATA } from './actions'
import { Map } from 'immutable'

const DefaultState = Map({
    'entities' : {
        'weapon_types' : []  
    }
});

export default (state = DefaultState, action) =>
    (action.type == RECEIVE_DATA) ?
        state.setIn(['entities', action.payload.entity], action.payload.data) :
        state
