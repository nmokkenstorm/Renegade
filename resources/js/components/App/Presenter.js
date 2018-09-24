import React from 'react';

export default props =>
    <div className="container">
        <div className="row justify-content-center mt-5">
            <div className="col-12 col-md-6 col-lg-6">
                <div className="card">
                    <div className="card-header">
                        Weapon Types 
                    </div>

                    <div className="card-body">
                        <table className="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        Name    
                                    </th>
                                    <th scope="col">
                                        Created 
                                    </th>
                                    <th scope="col">
                                        Updated
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                {
                                    props.data.map(e =>
                                        <tr key={e.name}>
                                            <th scope="row">{e.name}</th>
                                            <td>{e.created_at}</td>
                                            <td>{e.updated_at}</td>
                                        </tr>
                                    )
                                }
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
