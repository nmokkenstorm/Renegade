export const loadData = entity =>
    dispatch =>
        fetch(window.location + 'api/' + entity)
            .then(data => data.json())
            .then(data => dispatch(receiveData(entity, data)))

export const RECEIVE_DATA = 'RECEIVE_DATA'

export const receiveData = (entity, data) =>
    ({
        type : RECEIVE_DATA,
        payload : {
            entity,
            data
        }
    })
