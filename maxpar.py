
from multiprocessing import Value, Array, Process
import time

class Task(Process):
    name = ""
    reads = []
    writes = []
    run = None

    def __init__(self, name, reads, writes, run):
        super(Task, self).__init__() 
        if name == "" or name == None:
            print("you must enter a name")
        self.name = name
        self.reads = reads
        self.writes = writes
        if (run == None):
            print("There is no function to run in task", name)
        self.run = run
        self.dependencies = []
        self.listed = 0
        


class TaskSystem:
    tasks = []
    dictionary = None
    

    def __init__(self, tasks, dictionary):
        seen = []
        for task in tasks:
            if task.name in seen: 
                print("there are duplicates in your tasks")
            seen.append(task.name)
        self.tasks = tasks
        for elem in dictionary.keys():
            if elem not in seen:
                print("the task", elem, "doesnt exist")
        for elem in seen:
            if elem not in dictionary.keys():
                print("you didnt include the task", elem, "in your dictionary")
        self.dictionary = dictionary
        self.putDependencies()
        self.layers = []
        self.done = []
        self.priority()
    
    def getDependencies(self, taskName):
        if taskName in self.dictionary:
            depends  = self.getTask(taskName).dependencies
            print("Dependencies : ", ', '.join(map(lambda x: str(x.name), depends)))
            return depends
        else:
            print("The task you're trying to show doesnt exist")
            return []

    def putDependencies(self):
        for task in self.tasks:
            for depend in self.dictionary[task.name]:
                task.dependencies.append(self.getTask(depend))



    def getTask(self, taskName):
        return   [x for x in self.tasks if x.name == taskName][0]


    def priority(self):
        i = 0
        while (1):
            level = []
            for task in self.tasks:
                if self.canBeDone(task) and not task.listed:
                    level.append(task)
                    task.listed = 1

            for t in  level:
                self.done.append(t)

            self.layers.append(level)

            if self.isEmpty():
                break
            i += 1


    def canBeDone(self, task):
        for depend in task.dependencies:
            if depend not in self.done:
                return False
        return True
    def isEmpty(self):
        for task in self.tasks:
            if task.listed == 0:
                return False
        return True
    def run(self):
        for layer in self.layers:
            for t in layer:
                t.start()
            for t in layer:
                t.join()
