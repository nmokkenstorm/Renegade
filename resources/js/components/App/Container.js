import React from 'react';
import Presenter from './Presenter';
import {connectWithLifecycle} from 'react-lifecycle-component'
import { loadData } from '../../redux/actions'

const mapDispatchToProps = dispatch => ({
    componentDidMount : () => dispatch(loadData('weapon_types'))
})

const mapStateToProps = state => ({
    data : state.data
})

export default connectWithLifecycle(mapStateToProps, mapDispatchToProps)(Presenter)
