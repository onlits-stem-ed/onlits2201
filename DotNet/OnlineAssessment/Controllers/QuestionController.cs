using Microsoft.AspNetCore.Mvc;
using OnlineAssessment.Models;

namespace OnlineAssessment.Controllers
{
    public class QuestionController : Controller
    {
        private OnlineAssessmentContext context;

        public QuestionController(OnlineAssessmentContext context)
        {
            this.context = context;
        }

        public IActionResult Index()
        {
            List<Question> Questions = context.Questions.ToList();
            return View(Questions);
        }

        public IActionResult Create()
        {
            return View();
        }

        [HttpPost]
        public IActionResult Create(Question question)
        {
            context.Add(new Question
            {
                Questions = question.Questions
            });
            context.SaveChanges();
            List<Question> Questions = context.Questions.ToList();
            return View("Index", Questions);
        }

        public IActionResult Details(int id)
        {
            Question question = context.Questions.Find(id);
            return View(question);
        }

        public IActionResult Edit(int id)
        {
            Question question = context.Questions.Find(id);
            return View(question);
        }

        [HttpPost]
        public IActionResult Edit(int id, Question question)        //Here Question question is associated with html form
        {
            Question _question = context.Questions.Find(id);
            _question.Questions = question.Questions;               //Modifying old data with new data
            context.SaveChanges();

            List<Question> Questions = context.Questions.ToList();
            return View("Index", Questions);
        }

        public IActionResult Delete(int id)
        {
            context.Questions.Remove(context.Questions.Find(id));
            context.SaveChanges();
            List<Question> Questions = context.Questions.ToList();
            return View("Index", Questions);
        }
    }
}