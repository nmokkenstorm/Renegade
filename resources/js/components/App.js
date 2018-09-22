import React from 'react';

const data = [
    {
        name : 'Arc Caster',
        damage: '2d6 C',
        cost: 1000
    },
    {
        name : 'Bigger Arc Caster',
        damage: '4d6 C',
        cost: 5000
    },
    {
        name : 'Biggest Arc Caster',
        damage: '10d6 C',
        cost: 10000
    }
]

export default () =>
    <div className="container">
        <div className="row justify-content-center mt-5">
            <div className="col-12 col-md-6 col-lg-6">
                <div className="card">
                    <div className="card-header">
                        Project Renegade
                    </div>

                    <div className="card-body">
                        <table className="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        Name    
                                    </th>
                                    <th scope="col">
                                        Damage 
                                    </th>
                                    <th scope="col">
                                        Cost 
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                {
                                    data.map(e =>
                                        <tr key={e.name}>
                                            <th scope="row">{e.name}</th>
                                            <td>{e.damage}</td>
                                            <td>{e.cost}</td>
                                        </tr>
                                    )
                                }
                            </tbody>
                        </table>
                        <button type="button" className="btn btn-primary">
                            Fetch Data
                        </button> 
                    </div>
                </div>
            </div>
        </div>
    </div>
