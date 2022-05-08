// creating an array and passing the number, questions, options, and answers
let questions = [
  {
    numb: 1,
    question:
      "Which of the following is generally used for performing tasks like creating the structure of the relations, deleting relation?",
    answer: "DDL(Data Definition Language)",
    options: [
      "DDL(Data Definition Language)",
      "DML(Data Manipulation Language)",
      "  Query",
      "Relational Schema",
    ],
  },
  {
    numb: 2,
    question:
      "Which of the following provides the ability to query information from the database and insert tuples into, delete tuples from, and modify tuples in the database?",
    answer: "DML(Data Manipulation Language)",
    options: [
      "DDL(Data Definition Language)",
      " Query",
      "DML(Data Manipulation Language)",
      " Relational Schema",
    ],
  },
  {
    numb: 3,
    question: "Database Management System is a type of _____software.",
    answer: "system software",
    options: [
      "application software",
      "general software",
      "system software",
      "Both A and C",
    ],
  },
  {
    numb: 4,
    question:
      "A huge collection of the information or data accumulated form several different sources is known as ____:",
    answer: "Data Warehouse",
    options: [
      "Data Warehouse",
      "Data Mining",
      "Data Management",
      "Both B and C",
    ],
  },
  {
    numb: 5,
    question:
      " Which one of the following refers to the copies of the same data (or information) occupying the memory space at multiple places.",
    answer: "Data Redundancy",
    options: [
      "Data Redundancy",
      "Data Inconsistency",
      "Data Repository",
      "Data Mining",
    ],
  },
  // you can uncomment the below codes and make duplicate as more as you want to add question
  // but remember you need to give the numb value serialize like 1,2,3,5,6,7,8,9.....

  //   {
  //   numb: 6,
  //   question: "Your Question is Here",
  //   answer: "Correct answer of the question is here",
  //   options: [
  //     "Option 1",
  //     "option 2",
  //     "option 3",
  //     "option 4"
  //   ]
  // },
];
