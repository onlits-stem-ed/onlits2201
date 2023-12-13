using Microsoft.AspNetCore.Mvc;
using OnlineAssessment.Models;

namespace OnlineAssessment.Controllers
{
    public class UserController: Controller
    {
        private OnlineAssessmentContext _context;

        public UserController(OnlineAssessmentContext context)
        {
            _context = context;
        }

        [HttpPost]
        public void Authenticate()
        {

        }
    }
}