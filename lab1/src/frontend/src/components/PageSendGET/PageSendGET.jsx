export default function PageSendGET() {
    return (
        <div>
            <form action="/view-GET">
                {/* Name */}
                <div className="mb-3">
                    <label className="form-label">Name</label>
                    <input
                        className="form-control"
                        type="text"
                        name="Name"
                        placeholder="Kelly Smith"
                    />
                </div>
                {/* Position */}
                <div className="mb-3">
                    <label className="form-label">Position</label>
                    <input
                        className="form-control"
                        type="text"
                        name="Position"
                        placeholder="Vice President"
                    />
                </div>
                {/* Department */}
                <div className="mb-3">
                    <label className="form-label">Department</label>
                    <input
                        className="form-control"
                        type="text"
                        name="Department"
                        placeholder="M&M"
                    />
                </div>
                {/* Phone */}
                <div className="mb-3">
                    <label className="form-label">Phone</label>
                    <input
                        className="form-control"
                        type="text"
                        name="Phone"
                        placeholder="8(0297)11-23-45"
                    />
                </div>
                {/* Email */}
                <div className="mb-3">
                    <label className="form-label">Email</label>
                    <input
                        className="form-control"
                        type="text"
                        name="Email"
                        placeholder="Kelly@example.com"
                    />
                </div>
                {/* Comment */}
                <div className="mb-3">
                    <label className="form-label">Comment</label>
                    <textarea
                        className="form-control"
                        name="Comment"
                        rows="12"
                        placeholder="I get up at 7 o'clock\nI wash my hands, my face and clean my teetch.\nI air my room and make the bed.\nThen I have my breakfast."
                    />
                </div>
                {/* Success  */}
                <div className="mb-3">
                    <button
                        className="btn btn-primary"
                    >Просмотреть отправленный GET</button>
                </div>
            </form>
        </div>
    )
}