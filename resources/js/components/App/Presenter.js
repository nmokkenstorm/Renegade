import React from 'react';
import Table from '../Table';

export default props =>
    <div className="container">
        <div className="row justify-content-center mt-5">
            <div className="col-12">
                <div className="card">
                    <div className="card-header">
                        Weapon Types 
                    </div>

                    <div className="card-body">
                        <Table entity="weapon_types"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
