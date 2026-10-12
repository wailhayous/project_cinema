import React from 'react'
import './TotCin.css';

export default function TotCin() {
    return (
        <div>
            <div className="tot">
                <div className="cinRoom">
                    <h2>4 Active</h2>
                    <p>CINEMA ROOMS</p>
                </div>
                <div className="totalSeat">
                    <h2>430</h2>
                    <p>TOTAL SEATS</p>
                </div>
                <div className="scring">
                    <h2>11 Screenings</h2>
                    <p>TODAY'S SHOWS</p>
                </div>
                <div className="location">
                    <h2>Casablanca,Morocco</h2>
                    <p>LOCATION</p>
                </div>
            </div>
        </div>
    )
}
