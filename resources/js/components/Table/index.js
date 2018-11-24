import React from 'react';
import Presenter from './Presenter';
import {connectWithLifecycle} from 'react-lifecycle-component'
import { loadData } from '../../redux/actions'

const mapDispatchToProps = (dispatch, props) => ({
    componentDidMount : () => dispatch(loadData(props.entity))
})

const mapStateToProps  = (state, props) => ({
    data : state.getIn(['entities', props.entity])
})

export default connectWithLifecycle(mapStateToProps, mapDispatchToProps)(Presenter)
